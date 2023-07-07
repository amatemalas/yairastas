<?php namespace Amatemalas\MultiBlocks\Components;

use Cms\Classes\ComponentBase;
use Rw\DynamicBlocks\Models\Block;
use Amatemalas\MultiBlocks\Models\Page as PageExtension;

/**
 * PageBlocksDetail Component
 */
class PageBlocksDetail extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'PageBlocksDetail Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $blocks = PageExtension::where('filename', $this->page->baseFileName)->with('blocks')->first()->blocks;

        if (!$blocks) {
            return;
        }

        $this->page['blocks'] = $this->blocks = $blocks;
    }
}
