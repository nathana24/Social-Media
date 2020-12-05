@extends('layouts.app')

<div id="app">
    <front-page user-name="{{ Auth::user()->name }}"></front-page>
</div>

