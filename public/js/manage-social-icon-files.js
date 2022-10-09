$(document).ready(function () {
    $(".deleteBtn").on("click", function () {
        $("#SocialIconDeleteModal").modal("show");
        const id = $(this).attr("data-id");
        $("#socialId").val(id);
    });
    var categoryArray = [];
    $("#addbtn").on("click", function () {
        const category = $("#cotegory").val();
        if (!categoryArray.includes(category)) {
            categoryArray.push(category);
        }

        var html = "";
        categoryArray.forEach(function (value) {
            if (value) {
                html += `
                <div class="col-3">
                    <h4 class="text-dark">${value}
                    </h4>
                    <div class="input-group my-3 rounded">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="images[]" id="${value}" required>
                            <label class="custom-file-label" for="${value}"><span class="pr-2">Choose file</span></label>
                        </div>
                    </div>
                </div>
            `;
            }
        });
        $("#socialIconUpload").html(html);
    });
});
