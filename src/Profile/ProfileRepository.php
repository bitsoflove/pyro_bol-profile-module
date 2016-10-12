<?php namespace Bitsoflove\ProfileModule\Profile;

use Anomaly\Streams\Platform\Ui\Form\Contract\FormRepositoryInterface;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Anomaly\UsersModule\User\UserModel;
use Anomaly\UsersModule\User\UserRepository;
use Bitsoflove\ProfileModule\Profile\Contract\ProfileRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;
use Illuminate\Support\Facades\Auth;

class ProfileRepository implements FormRepositoryInterface
{
    /**
     * The entry model.
     *
     * @var ProfileModel
     */
    protected $model;

    protected $attributes = ['password', 'first_name' , 'last_name', 'username'];

    /**
     * Create a new ProfileRepository instance.
     *
     * @param ProfileModel $model
     */
    public function __construct(UserModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find an entry or return a new one.
     *
     * @param $id
     * @return mixed
     */
    public function findOrNew($id)
    {
       return  $this->model->find($id)->get();
    }

    /**
     * Save the form.
     *
     * @param  FormBuilder $builder
     * @return bool|mixed
     */
    public function save(FormBuilder $builder)
    {
        $user = Auth::user();
        $form = $builder->getForm();

        foreach ($form->getFields() as $field) {
            if(in_array($field->field, $this->attributes)) {
                $user[$field->field] = $field->value;
            }
        }
        $user->save();
    }
}
