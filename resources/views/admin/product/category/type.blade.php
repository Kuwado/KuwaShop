<!-- Modal -->
<form action="/admin/product/add/category/type" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="category-type-add" tabindex="-1" aria-labelledby="typeAdd" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <div class="modal-header">
                <h5 class="modal-title" id="typeAdd">Thêm Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
        
                <div class="modal-body">
                    <div id="type-body">
                        <div class="add-detail">
                            <label>Tên Type: </label>
                            <input type="text" name="types[]" class="category-add-input">
                        </div>  
                    </div>

                    <div class="category-more">
                        <button type="button" class="category-more-btn" onClick="moreType()"><i class="fa-solid fa-plus"></i></button>
                        <button type="button" class="category-less-btn" onClick="lessType('type')"><i class="fa-solid fa-minus"></i></button>
                    </div>

                </div>
        
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="category-type-add-btn">Thêm</button>
                </div>
            </div>
        </div>
    </div>
    @csrf
</form>

