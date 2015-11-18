<div class="form-group">
	{!! Form::label('title', trans('adminpanel.title') .':') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('url', trans('adminpanel.url') .':') !!}
	{!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('category', trans('adminpanel.category') .':') !!}
	{!! Form::text('category', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('priority', trans('adminpanel.priority') .':') !!}
	{!! Form::text('priority', null, ['class' => 'form-control']) !!}
</div>

 <div class="form-group">
	{!! Form::label('body', trans('adminpanel.body') .':') !!}
	{!! Form::textarea('body', null, ['id' => 'editor1']) !!}
</div>

<div class="form-group">
	{!! Form::label('isPublished', trans('adminpanel.publish') .':') !!}
	{!! Form::select('isPublished', array(true=>trans('adminpanel.publish'), false=>trans('adminpanel.hide')),1,['class' => 'form-control']) !!}
</div>

<div class="form-group text-center">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
	{!! Html::link('/home/pages', trans('adminpanel.back') .':', ['class' => 'btn btn-primary']) !!}
</div>


            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
               /* CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl: '/browser/browse.php',
    filebrowserImageBrowseUrl: '/browser/browse.php?type=Images',
    filebrowserUploadUrl: '/uploader/upload.php',
    filebrowserImageUploadUrl: '/uploader/upload.php?type=Images'
});*/
            </script>