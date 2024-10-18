<p class="box__title">Create New Slide</p>
<form action="{{ route('slides.store') }}" method="post" class="padding-30" enctype="multipart/form-data">
    @csrf
    <x-input type="file" name="image" placeholder="Image" required />
    <x-input type="number" name="priority" placeholder="Priority" />
    <x-input type="text" name="link" placeholder="Link" />
    <p class="box__title margin-bottom-15">Display Status</p>
    <select name="status" id="status">
        <option value="1" selected>Active</option>
        <option value="0">Inactive</option>
    </select>
    <button class="btn btn-brand">Add</button>
</form>
