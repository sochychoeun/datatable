<script type="text/javascript">
    jQuery(document).ready(function(){
        // dynamic table
        oTable = jQuery('#[[ $id ]]').dataTable({

        @foreach ($options as $k => $o)
            [[ json_encode($k) ]]: [[ json_encode($o) ]],
        @endforeach

        @foreach ($callbacks as $k => $o)
            [[ json_encode($k) ]]: [[ $o ]],
        @endforeach
            "ordering": true,
            "order": [0, "desc"],
            "language": {
                "paginate": {
                    "next": "Suivant",
                    "previous": "Précédent"
                },
                "info": "Montre _START_ à _END_ de _TOTAL_ entrées",
                "infoEmpty": "Montre 0 total à 0 de 0 entrée",
                "lengthMenu": 'Montre <select class="form-control input-sm inpu-limiter">' +
                        '<option value="10">10</option>' +
                        '<option value="20">20</option>' +
                        '<option value="30">30</option>' +
                        '<option value="40">40</option>' +
                        '<option value="50">50</option>' +
                        '<option value="-1">Tous</option>' +
                        '</select> records',
                "search": "Recherche : ",
                "infoFiltered": "(filtrer de _MAX_ total entrées)",
            }
        });
    // custom values are available via $values array
    });
</script>
