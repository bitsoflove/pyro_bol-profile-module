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


    protected $actions = ['update'];

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




}
