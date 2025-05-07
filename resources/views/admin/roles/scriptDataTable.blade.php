<!-- jQuery and DataTables JS from CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net@1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net-bs5@1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
       var table= $('#rolesTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('show_role_page') }}",
            columns: [
                { data: 'name', name: 'name' },
                { data: 'permissions', name: 'permissions' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }

            ]
        });
        $(document).on('click', '.delete-role', function() {
    var roleId = $(this).data('id');

    if (confirm('هل أنت متأكد من الحذف؟')) {
        $.ajax({
            url: '/roles_delete/' + roleId,
            type: 'DELETE',
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.success) {
                    alert(response.message);
                    $('#rolesTable').DataTable().ajax.reload();
                } else {
                    alert('حدث خطأ أثناء الحذف');
                }
            },
            error: function(xhr) {
                alert('حدث خطأ أثناء الحذف');
            }
        });
    }
});


});

</script>
<script>
    setTimeout(function() {
        let alert = document.getElementById('success-alert');
        if (alert) {
            alert.classList.remove('show');
            alert.classList.add('fade');
        }
    }, 5000); // 5000ms = 5 ثواني
</script>

