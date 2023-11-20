    function previewImage(event, imageId) {
        const input = event.target;
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const imagePreview = document.getElementById(imageId);
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    document.getElementById('bride_image').addEventListener('change', function(event) {
        previewImage(event, 'brideImagePreview');
    });

    document.getElementById('groom_image').addEventListener('change', function(event) {
        previewImage(event, 'groomImagePreview');
    });

    document.getElementById('bride_groom_image').addEventListener('change', function(event) {
        previewImage(event, 'bridegroomImagePreview');
    });
