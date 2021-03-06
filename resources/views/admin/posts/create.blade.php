@extends('admin.layouts.layout')
@section('title', '创建文章')
@push('styles')
    <style>
        body {color: #525252;}
        ul.list {margin: 0;padding-left: 11px;color: #524e4e;}
        .text-center {text-align: center;}
        .form-control {margin-bottom: 20px;}
        #reply_notice {margin-bottom: 15px;padding: 16px;background-color: #fff;border: 1px dashed #d9d9d9;}
        .helpblock {line-height: 30px;margin-bottom: 0px;}
        .editor-toolbar.fullscreen {z-index: 9999 !important;}
        .CodeMirror-fullscreen {z-index: 9999 !important;}
        .post-banner {height: 280px;max-height: 280px;}
        .voyager input[type=file] {padding: 5px;}
        .CodeMirror {font-size: 17px!important;color: black!important;}
    </style>
@endpush

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="panel panel-bordered">
            <form role="form" class="form-horizontal"
                action="{{ route('admin.posts.store') }}"
                method="POST" enctype="multipart/form-data"
                accept-charset="UTF-8">
                <div class="panel-body">
                    {{ csrf_field() }}
                    @include('admin.layouts.partials.errors')

                    <h2 class="text-center">创造文章</h2>
                    <hr>
                    <input type="text" class="form-control title" name="title" value="" placeholder="请输入文章标题">

                    {{-- <input type="text" class="form-control" name="slug" value="" placeholder="请输入文章 slug"> --}}
                    <input type="file" class="form-control" name="banner">

                    <select class="form-control" name="category_id" placeholder="请选择分类">
                        <option value="">请选择分类</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    <div id="reply_notice" class="">
                        <ul class="helpblock list rm-link-color add-link-underline">
                          <li>请注意单词拼写，以及中英文排版，<a href="https://github.com/sparanoid/chinese-copywriting-guidelines">参考此页</a></li>
                          <li>支持 Markdown 格式, <strong>**粗体**</strong>、~~删除线~~、<code>`单行代码`</code>, 更多语法请见这里 <a href="https://github.com/riku/Markdown-Syntax-CN/blob/master/syntax.md">Markdown 语法</a></li>
                          <li>上传图片, 支持拖拽和剪切板黏贴上传, 格式限制 - jpg, png, gif</li>
                          <li>发布框支持本地存储功能，会在内容变更时保存，「提交」按钮点击时清空</li>
                        </ul>
                    </div>

                    <textarea name="content" class="form-control" id="sieditor-id" data-upload-url="{{ route('admin.upload.sieditor') }}" data-upload-token="{{ csrf_token() }}"></textarea>

                    <button type="submit" class="btn btn-primary submit-btn">发布</button>&nbsp;&nbsp;or&nbsp;&nbsp;
                    <input type="hidden" name="is_draft" value="no" id="draft">
                    <button type="button" class="btn btn-basic" id="save-draft">保存草稿</button>
                    <div class=""></div>
                </div><!-- panel-body -->
            </form>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="{{ mix('js/admin-sieditor.js') }}"></script>
@endpush
