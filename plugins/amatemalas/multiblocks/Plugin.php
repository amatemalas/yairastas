<?php namespace Amatemalas\MultiBlocks;

use Cms\Classes\Page as CmsPage;
use Event;
use Illuminate\Support\Facades\Schema;
use Amatemalas\MultiBlocks\Components\PageBlocksDetail;
use Amatemalas\MultiBlocks\Models\Page;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            PageBlocksDetail::class => 'PageBlocksDetail'
        ];
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        if (Schema::hasTable('amatemalas_multiblocks_pages')) {
            $pages = CmsPage::sortBy('baseFileName')->all();

            foreach ($pages as $page) {
                $extension = Page::updateOrCreate(['filename' => $page->baseFileName], [
                    'title' => $page->title,
                    'filename' => $page->baseFileName,
                    'url' => $page->url
                ]);
            }

            $pages = Page::all();
            $cms = array_keys(CmsPage::getNameList());
            foreach ($pages as $page) {
                if (!in_array($page->filename, $cms)) {
                    $page->delete();
                }
            }
        }
    }
}
