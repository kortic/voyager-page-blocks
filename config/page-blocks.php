<?php

/*
|--------------------------------------------------------------------------
| Page Blocks
|--------------------------------------------------------------------------
|
| This configuration file is used to display page blocks and their content,
| where each key is a block and each property is specific to that block.
|
*/

return [
    'callout' => [
        'name' => 'Callout',
        'fields' => [
            'size' => [
                'field' => 'size',
                'display_name' => 'Size (height) of section',
                'partial' => 'voyager::formfields.select_dropdown',
                'required' => 1,
                'options' => [
                    'Small',
                    'Medium',
                    'Large',
                    'Extra Large',
                ],
                'placeholder' => 0,
            ],
            'background_image' => [
                'field' => 'background_image',
                'display_name' => 'Background image',
                'partial' => 'voyager::formfields.image',
                'required' => 1,
            ],
            'fade_background' => [
                'field' => 'fade_background',
                'display_name' => 'Fade out background',
                'partial' => 'voyager::formfields.checkbox',
                'required' => 0,
                'options' => [
                    'Yes',
                ],
            ],
            'title' => [
                'field' => 'title',
                'display_name' => 'Title',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => 'Changing the World!',
            ],
            'content' => [
                'field' => 'content',
                'display_name' => 'Content',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
            ],
            'button_text' => [
                'field' => 'button_text',
                'display_name' => 'Button Text',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => 'Learn More',
            ],
            'link' => [
                'field' => 'link',
                'display_name' => 'Link',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
        ],
        'template' => 'callout',
        'compatible' => '*',
    ],
    'cards_one_column' => [
        'name' => 'Cards - 1 Column',
        'fields' => [
            'image_position' => [
                'field' => 'image_position',
                'display_name' => 'Position of Image',
                'partial' => 'voyager::formfields.select_dropdown',
                'required' => 1,
                'options' => [
                    'Left',
                    'Right',
                ],
                'placeholder' => 0,
            ],
            'image' => [
                'field' => 'image',
                'display_name' => 'Image',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'title' => [
                'field' => 'title',
                'display_name' => 'Title',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Changing the World!',
            ],
            'content' => [
                'field' => 'content',
                'display_name' => 'Content',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
            ],
            'button_text' => [
                'field' => 'button_text',
                'display_name' => 'Button Text',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => 'Learn More',
            ],
            'link' => [
                'field' => 'link',
                'display_name' => 'Link',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
        ],
        'template' => 'cards_one_column',
        'compatible' => '*',
    ],
    'cards_two_columns' => [
        'name' => 'Cards - 2 Columns',
        'fields' => [
            'image1' => [
                'field' => 'image1',
                'display_name' => 'Column 1: Image',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'title1' => [
                'field' => 'title1',
                'display_name' => 'Column 1: Title',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Changing the World!',
            ],
            'content1' => [
                'field' => 'content1',
                'display_name' => 'Column 1: Content',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
            ],
            'button_text1' => [
                'field' => 'button_text1',
                'display_name' => 'Column 1: Button Text',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => 'Learn More',
            ],
            'link1' => [
                'field' => 'link1',
                'display_name' => 'Column 1: Link',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
            'image2' => [
                'field' => 'image2',
                'display_name' => 'Column 2: Image',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'title2' => [
                'field' => 'title2',
                'display_name' => 'Column 2: Title',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Changing the World!',
            ],
            'content2' => [
                'field' => 'content2',
                'display_name' => 'Column 2: Content',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
            ],
            'button_text2' => [
                'field' => 'button_text2',
                'display_name' => 'Column 2: Button Text',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => 'Learn More',
            ],
            'link2' => [
                'field' => 'link2',
                'display_name' => 'Column 2: Link',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
        ],
        'template' => 'cards_two_columns',
        'compatible' => '*',
    ],
    'cards_three_columns' => [
        'name' => 'Cards - 3 Columns',
        'fields' => [
            'image1' => [
                'field' => 'image1',
                'display_name' => 'Column 1: Image',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'title1' => [
                'field' => 'title1',
                'display_name' => 'Column 1: Title',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Changing the World!',
            ],
            'content1' => [
                'field' => 'content1',
                'display_name' => 'Column 1: Content',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
            ],
            'button_text1' => [
                'field' => 'button_text1',
                'display_name' => 'Column 1: Button Text',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => 'Learn More',
            ],
            'link1' => [
                'field' => 'link1',
                'display_name' => 'Column 1: Link',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
            'image2' => [
                'field' => 'image2',
                'display_name' => 'Column 2: Image',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'title2' => [
                'field' => 'title2',
                'display_name' => 'Column 2: Title',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Changing the World!',
            ],
            'content2' => [
                'field' => 'content2',
                'display_name' => 'Column 2: Content',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
            ],
            'button_text2' => [
                'field' => 'button_text2',
                'display_name' => 'Column 2: Button Text',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => 'Learn More',
            ],
            'link2' => [
                'field' => 'link2',
                'display_name' => 'Column 2: Link',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
            'image3' => [
                'field' => 'image3',
                'display_name' => 'Column 3: Image',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'title3' => [
                'field' => 'title3',
                'display_name' => 'Column 3: Title',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Changing the World!',
            ],
            'content3' => [
                'field' => 'content3',
                'display_name' => 'Column 3: Content',
                'partial' => 'voyager::formfields.text',
                'required' => 1,
                'placeholder' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.',
            ],
            'button_text3' => [
                'field' => 'button_text3',
                'display_name' => 'Column 3: Button Text',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => 'Learn More',
            ],
            'link3' => [
                'field' => 'link3',
                'display_name' => 'Column 3: Link',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
        ],
        'template' => 'cards_three_columns',
        'compatible' => '*',
    ],
    'content_one_column' => [
        'name' => 'Content - 1 Column',
        'fields' => [
            'html_content' => [
                'field' => 'html_content',
                'display_name' => 'Column 1 content',
                'partial' => 'voyager::formfields.rich_text_box',
                'required' => 1,
                'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
            ],
        ],
        'template' => 'content_one_column',
        'compatible' => '*',
    ],
    'content_two_columns' => [
        'name' => 'Content - 2 Columns',
        'fields' => [
            'html_content' => [
                'field' => 'html_content',
                'display_name' => 'Column 1 content',
                'partial' => 'voyager::formfields.rich_text_box',
                'required' => 1,
                'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
            ],
            'html_content2' => [
                'field' => 'html_content2',
                'display_name' => 'Column 2 content',
                'partial' => 'voyager::formfields.rich_text_box',
                'required' => 0,
                'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
            ],
        ],
        'template' => 'content_two_columns',
        'compatible' => '*',
    ],
    'content_three_columns' => [
        'name' => 'Content - 3 Columns',
        'fields' => [
            'html_content' => [
                'field' => 'html_content',
                'display_name' => 'Column 1 content',
                'partial' => 'voyager::formfields.rich_text_box',
                'required' => 1,
                'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
            ],
            'html_content2' => [
                'field' => 'html_content2',
                'display_name' => 'Column 2 content',
                'partial' => 'voyager::formfields.rich_text_box',
                'required' => 0,
                'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
            ],
            'html_content3' => [
                'field' => 'html_content3',
                'display_name' => 'Column 3 content',
                'partial' => 'voyager::formfields.rich_text_box',
                'required' => 0,
                'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
            ],
        ],
        'template' => 'content_three_columns',
        'compatible' => '*',
    ],
    'content_four_columns' => [
        'name' => 'Content - 4 Columns',
        'fields' => [
            'html_content' => [
                'field' => 'html_content',
                'display_name' => 'Column 1 content',
                'partial' => 'voyager::formfields.rich_text_box',
                'required' => 1,
                'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
            ],
            'html_content2' => [
                'field' => 'html_content2',
                'display_name' => 'Column 2 content',
                'partial' => 'voyager::formfields.rich_text_box',
                'required' => 0,
                'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
            ],
            'html_content3' => [
                'field' => 'html_content3',
                'display_name' => 'Column 3 content',
                'partial' => 'voyager::formfields.rich_text_box',
                'required' => 0,
                'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
            ],
            'html_content4' => [
                'field' => 'html_content4',
                'display_name' => 'Column 4 content',
                'partial' => 'voyager::formfields.rich_text_box',
                'required' => 0,
                'placeholder' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>',
            ],
        ],
        'template' => 'content_four_columns',
        'compatible' => '*',
    ],
    'image_row' => [
        'name' => 'Row of Images',
        'fields' => [
            'image1' => [
                'field' => 'image1',
                'display_name' => 'Image 1',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'link1' => [
                'field' => 'link1',
                'display_name' => 'Link for Image 1',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
            'image2' => [
                'field' => 'image2',
                'display_name' => 'Image 2',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'link2' => [
                'field' => 'link2',
                'display_name' => 'Link for Image 2',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
            'image3' => [
                'field' => 'image3',
                'display_name' => 'Image 3',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'link3' => [
                'field' => 'link3',
                'display_name' => 'Link for Image 3',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
            'image4' => [
                'field' => 'image4',
                'display_name' => 'Image 4',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'link4' => [
                'field' => 'link4',
                'display_name' => 'Link for Image 4',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
            'image5' => [
                'field' => 'image5',
                'display_name' => 'Image 5',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'link5' => [
                'field' => 'link5',
                'display_name' => 'Link for Image 5',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
            'image6' => [
                'field' => 'image6',
                'display_name' => 'Image 6',
                'partial' => 'voyager::formfields.image',
                'required' => 0,
            ],
            'link6' => [
                'field' => 'link6',
                'display_name' => 'Link for Image 6',
                'partial' => 'voyager::formfields.text',
                'required' => 0,
                'placeholder' => '#',
            ],
        ],
        'template' => 'image_row',
        'compatible' => '*',
    ],
];
