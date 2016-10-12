<?php namespace Bitsoflove\ProfileModule\Profile;

use Anomaly\Streams\Platform\Entry\EntryObserver;

class ProfileObserver extends EntryObserver
{
    public function updated(EntryInterface $entry)
    {
        dd($entry);
        parent::updated($entry);
    }
    public function created(EntryInterface $entry)
    {
        dd($entry);
        parent::created($entry);
    }
}
