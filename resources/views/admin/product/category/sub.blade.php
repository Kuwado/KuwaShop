<!-- Modal -->
<form action="/admin/product/add/category/sub" enctype="multipart/form-data" method="post">
    <div class="modal fade" id="category-sub-add" tabindex="-1" aria-labelledby="subAdd" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <div class="modal-header">
                <h5 class="modal-title" id="subAdd">Thêm SubType</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
        
                <div class="modal-body sub-body">
                    <div class="category-more">
                        <button type="button" class="category-more-btn" onClick="moreSub()"><i class="fa-solid fa-plus"></i></button>
                    </div>

                    <div class="add-detail">
                        <label>Tên SubType: </label>
                        <input type="text" name="subs[]" class="category-add-input">
                    </div> 
                </div>
        
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="category-sub-add-btn">Thêm</button>
                </div>
            </div>
        </div>
    </div>
</form>

