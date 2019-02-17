<form action="{{ route('status.store') }}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea name="content" placeholder="聊聊新鲜事儿..." class="form-control" cols="5">{{ old('content') }}</textarea>
    <div class="text-right">
        <button class="btn btn-primary mt-3">发布</button>
    </div>
</form>