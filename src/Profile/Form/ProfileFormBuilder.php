<?php namespace Bitsoflove\ProfileModule\Profile\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Bitsoflove\ProfileModule\Profile\ProfileRepository;

class ProfileFormBuilder extends FormBuilder
{
    protected $model = \Anomaly\UsersModule\User\UserModel::class;

    protected $repository = \Bitsoflove\ProfileModule\Profile\ProfileRepository::class;
    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [
        'username' => [
            'label'        => 'anomaly.module.users::field.username.name',
            'type'         => 'anomaly.field_type.text',
            'required'     => false,
        ],
        'first_name'       => [
            'label'        => 'anomaly.module.users::field.first_name.name',
            'type'         => 'anomaly.field_type.text',
        ],
        'last_name'        => [
            'label'        => 'anomaly.module.users::field.last_name.name',
            'type'         => 'anomaly.field_type.text',
        ],
        'old_password'         => [
            'label'        => 'bitsoflove.module.profile::field.old_password.name',
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type' => 'password',
            ],
            'value'    => '',
            'required' => false,
        ],
        'password'         => [
            'label'        => 'bitsoflove.module.profile::field.new_password.name',
            'type'         => 'anomaly.field_type.text',
            'config' => [
                'type' => 'password',
            ],
            'value'    => '',
            'required' => false,
        ],
        'confirm_password'         => [
            'label'        => 'bitsoflove.module.profile::field.confirm_password.name',
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type' => 'password',
            ],
            'value'    => '',
            'required' => false,
        ],


    ];

    /**
     * Fields to skip.
     *
     * @var array|string
     */
    protected $skips = [];

    /**
     * The form actions.
     *
     * @var array|string
     */
    protected $actions = [];

    /**
     * The form buttons.
     *
     * @var array|string
     */
    protected $buttons = [];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [
        'info'=>[
            'fields' =>[
                'first_name',
                'last_name',
                'username'
            ],
            'title' => 'bitsoflove.module.profile::section.info.name'
        ],
        'password' =>[
            'fields' =>[
                'old_password',
                'password',
                'confirm_password'
            ],
            'title' => 'bitsoflove.module.profile::section.password.name'
        ]
    ];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [];



}
