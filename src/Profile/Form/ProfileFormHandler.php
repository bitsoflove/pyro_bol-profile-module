<?php namespace Bitsoflove\ProfileModule\Profile\Form;


use Anomaly\ContactPlugin\Form\Command\BuildMessage;
use Anomaly\ContactPlugin\Form\Command\GetMessageView;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Bitsoflove\ProfileModule\Profile\ProfileRepository;
use Illuminate\Mail\Message;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;


class ProfileFormHandler
{

    /**
     * Handle the form.
     *
     * @param FormBuilder $builder
     */
    public function handle(FormBuilder $builder, ProfileRepository $repo)
    {
        if (!$builder->canSave()) {
            return;
        }




        $builder->setRepository($repo);
        $fields = $builder->getForm()->getFields();
        $user = Auth::user();
        if(strlen($fields[3]->value) != 0) {

            if (Hash::check($fields[3]->value, $user->password)) {
                if($fields[4]->value != $fields[5]->value){
                    $builder->setFormErrors(new MessageBag(["password" => "not same passwords"]));
                    return;
                }
            } else {
                $builder->setFormErrors(new MessageBag(["old_password" => "not correct"]));
                return;
            }
        }

        //save first_name, last_name and username
        //dd($builder);
        $builder->saveForm();

    }
}
