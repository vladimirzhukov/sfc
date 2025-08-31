<?php

namespace App\Console\Commands;

use App\Models\EventMeta;
use Illuminate\Console\Command;

class FillEventsMeta extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fill-events-meta';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $metas = array();
        $json = file_get_contents(resource_path('jsons/events_01.json'));
        $data = json_decode($json, true);
        foreach ($data as $key => $dat) {
            $metas[$key] = $dat;
        }
        $json = file_get_contents(resource_path('jsons/events_02.json'));
        $data = json_decode($json, true);
        foreach ($data as $key => $dat) {
            $metas[$key] = $dat;
        }
        $json = file_get_contents(resource_path('jsons/events_03.json'));
        $data = json_decode($json, true);
        foreach ($data as $key => $dat) {
            $metas[$key] = $dat;
        }
        if (!empty($metas)) {
            foreach ($metas as $key => $val) {
                foreach ($val as $k => $value) {
                    if (empty($value['parameter_link']) && empty($value['parameter_category'])) {
                        $meta = EventMeta::where('language', $value['language'])->whereNull('parameter_link')->whereNull('parameter_category')->first();
                    } elseif (!empty($value['parameter_link']) && empty($value['parameter_category'])) {
                        $meta = EventMeta::where([
                            ['language', $value['language']],
                            ['parameter_link', $value['parameter_link']]
                        ])->whereNull('parameter_category')->first();
                    } elseif (!empty($value['parameter_link']) && !empty($value['parameter_category'])) {
                        $meta = EventMeta::where([
                            ['language', $value['language']],
                            ['parameter_link', $value['parameter_link']],
                            ['parameter_category', $value['parameter_category']]
                        ])->first();
                    }
                    if (empty($meta->id)) {
                        $meta = new EventMeta();
                        $meta->language = $value['language'];
                        $meta->parameter_link = $value['parameter_link'];
                        $meta->parameter_category = $value['parameter_category'];
                    }
                    $meta->meta_title = $value['meta_title'];
                    $meta->meta_description = $value['meta_description'];
                    $meta->meta_keywords = $value['meta_keywords'];
                    $meta->page_h1 = $value['page_h1'];
                    $meta->page_subtitle = $value['page_subtitle'];
                    $meta->page_h2 = $value['page_h2'];
                    $meta->page_subnote = $value['page_subnote'];
                    $meta->page_seo = $value['page_seo'];
                    $meta->save();
                    $this->info('Event meta for ' . $value['language'] . ' - ' . $value['parameter_link'] . ' - ' . $value['parameter_category'] . ' saved');
                }
            }
        }
    }
}
