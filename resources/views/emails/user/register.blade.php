@component('mail::message')
# Introduction

Welcome to 1Page.info

@component('mail::button', ['url' => ''])
Home
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
