/**
 * BLOCK: FileBird-gallery
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */

//  Import CSS.
import './editor.scss';
import './style.scss';

import {
	filter
} from 'lodash';

const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks
const { RichText } = wp.editor;
import {
	BlockControls,
	InspectorControls
} from '@wordpress/block-editor';
import { PanelBody, SelectControl, RangeControl, ToggleControl } from '@wordpress/components';
const { Component } = wp.element; // Import the Component base class from the React.js abstraction

import GalleryImage from './gallery-image';

/**
 * Register: aa Gutenberg Block.
 *
 * Registers a new block provided a unique name and an object defining its
 * behavior. Once registered, the block is made editor as an option to any
 * editor interface where blocks are implemented.
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string}   name     Block name.
 * @param  {Object}   settings Block settings.
 * @return {?WPBlock}          The block, if it has been successfully
 *                             registered; otherwise `undefined`.
 */
const linkOptions = [
	{ value: 'attachment', label: __( 'Attachment Page' ) },
	{ value: 'media', label: __( 'Media File' ) },
	{ value: 'none', label: __( 'None' ) },
];

class FileBirdGallery extends Component {
	constructor() {
    super( ...arguments );
    
    this.setLinkTo = this.setLinkTo.bind( this );

		this.state = {
			selectedImage: null,
			attachmentCaptions: null,
		};
	}
	componentDidMount () {
		//Init folders
		this.getFolders();
	}
	componentDidUpdate( prevProps ) {
		// Deselect images when deselecting the block
		if ( ! this.props.isSelected && prevProps.isSelected ) {
			this.setState( {
				selectedImage: null,
				captionSelected: false,
			} );
		}
	}
	componentWillUnmount () {

  }
  setLinkTo( value ) {
		this.props.setAttributes( { linkTo: value } );
	}
	async getFolders() {
		const response = await fetch( `${ ajaxurl }?action=filebird-get-folders`, {
            method: 'GET',
        })
        .then(
            returned => {
                if (returned.ok) return returned;
                throw new Error('Network response was not ok.');
            }
        );

		let data = await response.json();
		this.props.setAttributes( { 
			folders: data.data,
			selectedFolder: this.props.attributes.selectedFolder
		} );
	}
	async getImages(newfolder, onDone) {
		let $this = this;
		$this.props.setAttributes({
			isLoading: true
		});
		jQuery.ajax({
			url: ajaxurl,
			method: 'POST',
			data: {
				action: 'query-attachments',
				query: {
					orderby: 'date',
					order: 'DESC',
					posts_per_page: -1,
					paged: 1,
					nt_wmc_folder: newfolder
				}
			}
		}).done(function(json){
			$this.props.setAttributes({
				isLoading: false
			});
			$this.props.setAttributes( { 
				images: json.data
			});
			onDone(json.data);
		});
	}
	render() {
		const {
            attributes: {
				selectedFolder,
				folders,
				images,
				columns,
				isCropped,
        hasCaption,
        linkTo
			},
			isSelected,
            className,
        } = this.props;
		const onChangeFolder = ( newfolder ) => {
			if(newfolder != 0) {
				let $this = this;
				this.getImages(newfolder, function(_images){
					$this.props.setAttributes( { 
						selectedFolder: newfolder,
						columns:  $this.props.attributes.columns == 0 ?  (_images.length > 4 ? 4 : _images.length) :  $this.props.attributes.columns
					});
				});
			}
		};
		const onChangeColumn = (newColumns) => {
			this.props.setAttributes({
				columns: newColumns
			});
		}
		const onChangeIsCropped = () => {
			this.props.setAttributes({
				isCropped: !this.props.attributes.isCropped
			})
		}
		const onChangeHasCaption = () => {
			this.props.setAttributes({
				hasCaption: !this.props.attributes.hasCaption
			})
		}
		const onChangeCaption = (val) => {
			console.log(val);
		}
		const onRemoveImage = ( index ) => {
			return () => {
				const images = filter( this.props.attributes.images, ( img, i ) => index !== i );
				const { columns } = this.props.attributes;
				this.setState( { selectedImage: null } );
				this.props.setAttributes( {
					images,
					columns: columns ? Math.min( images.length, columns ) : columns,
				} );
			};
		}
		const onSelectImages = ( newImages ) => {
			const { columns, images } = this.props.attributes;
			const { attachmentCaptions } = this.state;
			this.setState(
				{
					attachmentCaptions: newImages.map( ( newImage ) => ( {
						id: newImage.id,
						caption: newImage.caption,
					} ) ),
				}
			);
			this.setAttributes( {
				images: newImages.map( ( newImage ) => ( {
					...pickRelevantMediaFiles( newImage ),
					caption: this.selectCaption( newImage, images, attachmentCaptions ),
				} ) ),
				columns: columns ? Math.min( newImages.length, columns ) : columns,
			} );
		}
		const setImageAttributes = ( index, attributes ) => {
			const { attributes: { images } } = this.props;
			const { setAttributes } = this;
			if ( ! images[ index ] ) {
				return;
			}
			this.props.setAttributes( {
				images: [
					...images.slice( 0, index ),
					{
						...images[ index ],
						...attributes,
					},
					...images.slice( index + 1 ),
				],
			} );
		}
		const onSelectImage = ( index ) => {
			return () => {
				if ( this.state.selectedImage !== index ) {
					this.setState( {
						selectedImage: index,
					} );
				}
			};
		}	
		
		return (
			<div className={ className }>
				{
					this.props.attributes.isLoading ? 
					(
						<div class="components-placeholder">
							<div class="components-placeholder__fieldset">
							<span class="components-spinner"></span>
							</div>
						</div>
					) : (
						images.length > 0 ? 
						(
							<ul className={ `wp-block-gallery columns-${ columns } ${ isCropped ? 'is-cropped' : '' }`}>
							{ images.map( ( img, index ) => {
									const ariaLabel = sprintf( __( 'image %1$d of %2$d in gallery' ), ( index + 1 ), images.length );
									return (
										<li className="blocks-gallery-item" key={ img.id || img.url }>
											<GalleryImage
												url={ img.url }
												alt={ img.alt }
												id={ img.id }
												isFirstItem={ index === 0 }
												isLastItem={ ( index + 1 ) === images.length }
												isSelected={ isSelected && this.state.selectedImage === index }
												onRemove={ onRemoveImage( index ) }
												onSelect={ onSelectImage( index ) }
												setAttributes={ ( attrs ) => setImageAttributes( index, attrs ) }
												caption={ this.props.attributes.hasCaption ? img.caption : false }
												aria-label={ ariaLabel }
											/>
										</li>
									);
								} ) }
							</ul>
						) : (
							this.props.attributes.selectedFolder == 0 ? 
							(
								<div class="components-notice is-error">
									<div class="components-notice__content">
										<p>{  __('Please choose folder in the block settings.') }</p>
									</div>
								</div>
							) : (
								<div class="components-notice is-error">
									<div class="components-notice__content">
										<p>{ __('Chosen folders have no images.') }</p>
									</div>
								</div>
							)
						)
					)
				}
				{
					<InspectorControls>
            <PanelBody title={ __( 'Gallery Settings' ) }>
              <SelectControl
                label={ __('Folder') }
                value={ selectedFolder }
                options={ folders }
                onChange={ onChangeFolder }
                multiple={ true }
              />
              { images.length > 0 && 
                <div>
                  <RangeControl
                    label={ __('Columns') }
                    value={ columns }
                    onChange={ onChangeColumn }
                    min={ 1 }
                    max={ 4 }
                  />
                  <ToggleControl
                    label={ __('Crop Images') }
                    help={ __('Thumbnails are cropped to align.') }
                    checked={ isCropped }
                    onChange={ onChangeIsCropped }
                  />
                  <ToggleControl
                    label={ __('Caption') }
                    help={ __('Display image caption') }
                    checked={ hasCaption }
                    onChange={ onChangeHasCaption }
                  />
                  <SelectControl
                    label={ __( 'Link To' ) }
                    value={ linkTo }
                    onChange={ this.setLinkTo }
                    options={ linkOptions }
                  />
                </div>
              }
            </PanelBody>
					</InspectorControls>
				}
			</div>
		);
	}
}
registerBlockType( 'filebird/block-filebird-gallery', {
	// Block name. Block names must be string that contains a namespace prefix. Example: my-plugin/my-custom-block.
  title: __( 'FileBird Gallery' ), // Block title.
  description: __( 'Display folder images in a rich gallery.' ),
	icon: 'images-alt2', // Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
	category: 'common', // Block category — Group blocks together based on common traits E.g. common, formatting, layout widgets, embed.
	keywords: [
		__( 'filebird-gallery' )
  ],
  supports: { // Hey WP, I want to use your alignment toolbar!
    align: true,
  },
	attributes: {
		isLoading: {
			type: 'boolean',
			default: false
		},
		selectedFolder: {
			type: 'array',
			default: []
		},
		foldres: {
			type: 'array',
			default: []
		},
		images: {
			type: 'array',
			default: []
		},
		columns: {
			type: 'integer',
			default: 3
		},
		isCropped: {
			type: 'boolean',
			default: true
		},
		hasCaption: {
			type: 'boolean',
			default: false
    },
    linkTo: {
      type: 'string',
      default: 'none'
    }
    },

	/**
	 * The edit function describes the structure of your block in the context of the editor.
	 * This represents what the editor will render when the block is used.
	 *
	 * The "edit" property must be a valid function.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/block-api/block-edit-save/
	 *
	 * @param {Object} props Props.
	 * @returns {Mixed} JSX Component.
	 */
	edit: FileBirdGallery,

	/**
	 * The save function defines the way in which the different attributes should be combined
	 * into the final markup, which is then serialized by Gutenberg into post_content.
	 *
	 * The "save" property must be specified and must be a valid function.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/block-api/block-edit-save/
	 *
	 * @param {Object} props Props.
	 * @returns {Mixed} JSX Frontend HTML.
	 */
	save: ( props ) => {
		return (
			<ul className={ props.className, `wp-block-gallery columns-${ props.attributes.columns } ${ props.attributes.isCropped ? 'is-cropped' : '' }` }>
				{ props.attributes.images.map( ( image ) => {
          let href;

					switch ( props.attributes.linkTo ) {
						case 'media':
							href = image.fullUrl || image.url;
							break;
						case 'attachment':
							href = image.link;
							break;
          }
          
					const img = (
						<img
							src={ image.url }
							alt={ image.alt }
							className={ image.id ? `wp-image-${ image.id }` : null }
						/>
					);
					return (
						<li key={ image.id || image.url } className="blocks-gallery-item">
							<figure>
                { href ? <a href={ href }>{ img }</a> : img }
								{ ! RichText.isEmpty( image.caption ) && (
									<RichText.Content tagName="figcaption" className="blocks-gallery-item__caption" value={ image.caption } />
								) }
							</figure>
						</li>
					);
				} ) }
			</ul>
		);
	}
} );
