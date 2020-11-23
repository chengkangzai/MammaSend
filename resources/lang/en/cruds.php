<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'phone_number'             => 'Phone number',
        ],
    ],
    'address'        => [
        'title'          => 'Address',
        'title_singular' => 'Address',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'street'            => 'Street',
            'street_helper'     => 'Enter your street name',
            'city'              => 'City',
            'city_helper'       => 'Enter your City',
            'zip_code'          => 'Zip Code',
            'zip_code_helper'   => 'Enter your Zip Code',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'state'             => 'State',
            'state_helper'      => ' ',
            'full_address'             => 'Full Address',
        ],
    ],
    'ride'           => [
        'title'          => 'Ride',
        'title_singular' => 'Ride',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'rider'             => 'Rider',
            'rider_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'payment'        => [
        'title'          => 'Payments',
        'title_singular' => 'Payment',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'total_received'         => 'Total Received',
            'total_received_helper'  => ' ',
            'rider_received'         => 'Rider Received',
            'rider_received_helper'  => ' ',
            'office_received'        => 'Office Received',
            'office_received_helper' => ' ',
            'user'                   => 'User',
            'user_helper'            => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'faqManagement'  => [
        'title'          => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory'    => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faqQuestion'    => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'answer'            => 'Answer',
            'answer_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'children'    => [
        'title'          => 'Children',
        'title_singular' => 'Child',
        'fields'         => [
            'id'                => 'ID',
            'full_name'         => 'Full Name',
            'IC_number'         => 'IC number',
            'school_name'       => 'School Name',
            'created_at'        => 'Created at',
            'updated_at'        => 'Updated At',
            'deleted_at'        => 'Deleted At',
            'pickup_address'           => 'Pickup Address',
            'dropoff_address'          => 'Drop Off Address',
            'full_name_helper'         => 'Please Enter the full name',
            'IC_number_helper'         => 'Please Enter the IC Number',
        ],
    ],
    'licence'    => [
        'title'          => 'Licence',
        'title_singular' => 'Licence ',
        'fields'         => [
            'class'                 => 'Driving licence class',
            'start_date'            => 'Valid start at ',
            'end_date'          => 'Valid end at',
            'IC_number'         => 'IC number',
            'created_at'        => 'Created at',
            'updated_at'        => 'Updated At',
            'deleted_at'        => 'Deleted At',
            'pickup_address'           => 'Pickup Address',
            'dropoff_address'          => 'Drop Off Address',
            'IC_number_helper'         => 'Please Enter the IC Number',
        ],
    ],
    'vehicle'    => [
        'title'          => 'Vehicles',
        'title_singular' => 'Vehicle ',
        'fields'         => [
            'car_plate'                 => 'Car Plate',
            'body_type'                  => 'Car Body Type',
            'manufacturer'              => 'Manufacturer ',
            'model'                     => 'Model',
            'variant'                   => 'Variant',
            'color'                     => 'Colour',
            'rider'                     => 'Rider',
            'created_at'                => 'Created at',
            'updated_at'                => 'Updated At',
            'deleted_at'                => 'Deleted At',
            'pickup_address'            => 'Pickup Address',
            'dropoff_address'           => 'Drop Off Address',
            'IC_number_helper'          => 'Please Enter the IC Number',
        ],
    ],
];
