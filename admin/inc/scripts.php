    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <script>
        function alert(type, msg) {
            let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
            let element = document.createElement('div');
            element.innerHTML = `<div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
        <strong>${msg}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`;

        document.body.append(element);
        }

    document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.custom-alert');
            alerts.forEach(alert => {
            setTimeout(() => {
                alert.remove();
            }, 5000);
            });
        });
        
        </script>
