<div class="max-w-none p-4 prose lg:prose-xl prose-primary dark:prose-invert">
    {!!
        (new \Illuminate\Support\HtmlString(
            str(strip_tags($data['content']))
                ->markdown()
        ))
        ->toHtml()
     !!}
</div>
