$(document).ready(function () {

    $('.date-mask').mask('00/00/0000');

    $("#eye-toggle").click(function () {
        var senhaInput = $("#senha");
        var tipo = senhaInput.attr("type");

        if (tipo === "password") {
            senhaInput.attr("type", "text");
            $("#eye-toggle i").removeClass("fa-solid fa-eye").addClass("fa-solid fa-eye-slash");
        } else {
            senhaInput.attr("type", "password");
            $("#eye-toggle i").removeClass("fa-solid fa-eye-slash").addClass("fa-solid fa-eye");
        }
    });
});


// Toast Config
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

// Avatar
function triggerClick() {
    document.querySelector('#profileImage').click();
}

function displayImage(e) {
    if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            // Set the src of the cropperImage
            var cropperImage = document.getElementById('cropperImage');
            cropperImage.src = e.target.result;

            // Destroy any existing modal instance
            var existingModal = document.getElementById('cropperModal');
            var existingModalInstance = bootstrap.Modal.getInstance(existingModal);
            if (existingModalInstance) {
                existingModalInstance.dispose();
            }

            // Open a new Bootstrap modal
            var modal = new bootstrap.Modal(document.getElementById('cropperModal'));
            modal.show();

            // Initialize Cropper.js
            var cropper = new Cropper(cropperImage, {
                aspectRatio: 1, // Set your desired aspect ratio
                viewMode: 1,
                minContainerWidth: 300,
                minContainerHeight: 300
            });

            // Handle the "Crop" button click
            document.getElementById('cropButton').addEventListener('click', function () {
                // Get the cropped dataURL
                var croppedDataUrl = cropper.getCroppedCanvas().toDataURL();

                // Update the profile display with the cropped image
                document.querySelector('#profileDisplay').setAttribute('src', croppedDataUrl);

                // Close the Bootstrap modal
                modal.hide();
            });

            // Handle the modal close event
            modal._element.addEventListener('hidden.bs.modal', function () {
                // Destroy the cropper instance
                cropper.destroy();
            });
        };
        reader.readAsDataURL(e.files[0]);
    }
}

function selectAvatar(avatarURL) {
    // Atualizar o preview com o avatar selecionado
    document.querySelector('#profileDisplay').setAttribute('src', avatarURL);
  
    // Fechar o modal
    var avatarModal = bootstrap.Modal.getInstance(document.getElementById('avatarModal'));
    avatarModal.hide();
  }