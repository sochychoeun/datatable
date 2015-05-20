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
                        "next": "[[ l('Suivant') ]]",
                        "previous": "[[ l('Précédent') ]]",
                        "first": "[[ l('Premier') ]]",
                        "last": "[[ l('Dernier') ]]"
                    },
                    "info": "[[ l('Montre') ]] _START_ à _END_ de _TOTAL_ [[ l('entrées') ]]",
                    "infoEmpty": "[[ l('Montre') ]] 0 total à 0 de 0 [[ l('entrées') ]]",
                    "lengthMenu": '[[ l("Montre") ]] <select class="form-control input-sm inpu-limiter">'+
                        '<option value="10">10</option>'+
                        '<option value="20">20</option>'+
                        '<option value="30">30</option>'+
                        '<option value="40">40</option>'+
                        '<option value="50">50</option>'+
                        '<option value="-1">Tous</option>'+
                        '</select> [[ l("records") ]]',
                    "search": "[[ l('Recherche') ]] : ",
                    "infoFiltered": "(filtrer de _MAX_ total [[ l('entrées') ]])",
                }
        });
    // custom values are available via $values array
    });
</script>
