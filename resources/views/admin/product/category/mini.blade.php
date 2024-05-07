<!-- Modal -->
<form action="/admin/product/add/category/mini/{{$sub->id}}" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="category-mini-add-{{$sub->id}}" tabindex="-1" aria-labelledby="miniAdd" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <div class="modal-header">
                <h5 class="modal-title" id="miniAdd">Thêm MiniType</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
        
                <div class="modal-body">
                    <div class="type-name">
                        <span>Tên Type: {{$type->name}}</span>
                        <span>Tên SubType: {{$sub->name}}</span>
                    </div>

                    <div id="mini-body-{{$sub->id}}">
                        <div class="add-detail">
                            <label>Tên MiniType: </label>
                            <input type="text" name="minis[]" class="category-add-input">
                        </div>  
                    </div>

                    <div class="category-more">
                        <button type="button" class="category-more-btn" onClick="moreMini({{$sub->id}})"><i class="fa-solid fa-plus"></i></button>
                        <button type="button" class="category-less-btn" onClick="lessMini({{$sub->id}})"><i class="fa-solid fa-minus"></i></button>
                    </div>

                </div>
        
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="category-mini-add-btn">Thêm</button>
                </div>
            </div>
        </div>
    </div>
    @csrf
</form>

