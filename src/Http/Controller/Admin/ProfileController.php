<?php namespace Bitsoflove\ProfileModule\Http\Controller\Admin;

use Bitsoflove\ProfileModule\Profile\Form\ProfileFormBuilder;
use Bitsoflove\ProfileModule\Profile\Table\ProfileTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Illuminate\Support\Facades\Auth;

class ProfileController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ProfileTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ProfileTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ProfileFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ProfileFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ProfileFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ProfileFormBuilder $form)
    {
        $id = Auth::user();
        return $form->render($id);
    }
}
