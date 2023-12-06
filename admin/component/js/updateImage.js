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

    document.getElementById('timeline_image1').addEventListener('change', function(event) {
        previewImage(event, 'timelineImage1Preview');
    });

    document.getElementById('timeline_image2').addEventListener('change', function(event) {
        previewImage(event, 'timelineImage2Preview');
    });

    document.getElementById('timeline_image3').addEventListener('change', function(event) {
        previewImage(event, 'timelineImage3Preview');
    });
