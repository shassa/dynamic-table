<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jion Task</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
    </head>
    <body class="container">
        <div class="row mt-3">
            <div class="col-lg-6 col-sm-12">
                <button class="btn btn-primary m-2" data-bs-toggle="modal"
                 data-bs-target="#Section1Modal">Add to Section_1</button>
                <table class="table table-striped">
                    <thead class="bg-dark text-white">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Birthdate</th>
                          <th scope="col">Created at</th>
                        </tr>
                      </thead>
                      <tbody id="sortable1" class="connectedSortable">
                      @foreach($section1 as $item)
                        <tr id="{{$item->id}}">
                          <td hidden><span>Section_1</span></td>
                          <td scope="row" hidden><span>{{$item->id}}</span></td>
                          <td scope="row"><span>{{$item->position}}</span></td>
                          <td class="inpt"><span>{{$item->name}}</span></td>
                          <td class="inpt"><span>{{$item->birthdate}}</span></td>
                          <td class="inpt"><span>{{$item->created_at}}</span></td>
                          
                        </tr>
                       @endforeach 
                      </tbody>
                </table>
            {{-- pagination --}}
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                {!! $section1->links() !!}
                </ul>
                </nav>
            </div>

            <div class="col-lg-6 col-sm-12">
              <button class="btn btn-primary m-2" data-bs-toggle="modal"
              data-bs-target="#Section2Modal">Add to Section_2</button>
                 <table class="table table-striped">
                    <thead class="bg-dark text-white">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Birthdate</th>
                          <th scope="col">Created at</th>
                        </tr>
                      </thead>
                      <tbody id="sortable2" class="connectedSortable">
                        @foreach($section2 as $item)
                          <tr id="{{$item->id}}">
                            <td hidden><span>Section_2</span></td>
                            <td scope="row" hidden><span>{{$item->id}}</span></td>
                            <td scope="row"><span>{{$item->position}}</span></td>
                            <td class="inpt"><span>{{$item->name}}</span></td>
                            <td class="inpt"><span>{{$item->birthdate}}</span></td>
                            <td class="inpt"><span>{{$item->created_at}}</span></td>
                          </tr>
                        @endforeach
                      </tbody>
                </table>
               {{-- pagination --}}
            {!! $section2->links() !!}
   
            </div>
        </div>
    {{-- modela1 --}}
    <div class="modal fade" id="Section1Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Section_1</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="SubmitForm">
            <div class="modal-body">
              <input class="form-control " placeholder="Name" type="text" id="name">
              <input class="form-control mt-2" placeholder="Birthdate" type="date" id="birthdate">
              <input class="form-control" type="date" id="created_at" hidden value="{{date("Y-m-d")}}">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
            </div>
        </form>

          </div>
        </div>
      </div>
    {{-- modela2 --}}
    <div class="modal fade" id="Section2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Section_2</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="SubmitForm2">
          <div class="modal-body">
            <input class="form-control " placeholder="Name" type="text" id="name2">
            <input class="form-control mt-2" placeholder="Birthdate" type="date" id="birthdate2">
            <input class="form-control" type="date" id="created_at2" hidden value="{{date("Y-m-d")}}">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
          </div>
      </form>

        </div>
      </div>
    </div>

    {{-- script --}}
        
    <script src="{{asset('jquery-3.4.1.min.js')}}"></script>

        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
       
       <script type="text/javascript">
       //--->make div editable > start
      
        // get update data
        $('.inpt').on('blur',function () 
        {
            let data={};
            data.table=$(this).closest("tr").find("td:eq(0)").text();
            data.id=$(this).closest("tr").find("td:eq(1)").text();
            data.name=$(this).closest("tr").find("td:eq(3)").text();
            data.birthdate=$(this).closest("tr").find("td:eq(4)").text();
            data.created_at=$(this).closest("tr").find("td:eq(5)").text();
             console.log(data);
            savechanges(data);
        });	

          $('body').on('click', '.inpt', function(){
                event.preventDefault();    
                $(this).attr('contenteditable','true');      
                  });
                
          //add and remove delete button
          $( "tr" ).hover(
            function() {
              var id=$(this).attr('id');
              var table=$(this).find("td:eq(0)").text();
                $( this ).append( $( '<button onclick="delettr('+id+',\''+table+'\')" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-trash3" viewBox="0 0 16 16"><path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/></svg></button>' ) )
                
            }, function() {
                $( this ).find( "button" ).last().remove();
            }
            );

        





         //update ajax
        function savechanges(data)
        {
                $.ajax({
                url:'{{route('update')}}',
                type:'post',
                headers: {
                'X-CSRF-Token': '{{ csrf_token() }}',
                },
                data:{data},
                success:function(){
                }
              });       
        }
    
       //add new section1
         $('#SubmitForm').on('submit',function(e){
          event.preventDefault();
            let data={};
            data.name = $('#name').val();
            data.birthdate = $('#birthdate').val();
            data.created_at = $('#created_at').val();
            store1(data);
        });

        function store1(data){
          $.ajax({
            url: '{{route('store')}}',
            type:"post",
            data:{
                "_token": "{{ csrf_token() }}",
                "name":data.name,
                "birthdate":data.birthdate,
                "created_at":data.created_at
            },
            success:function(data){
              $('#sortable1').append( $('<tr id='+data.id+'><td hidden>Section_2</td><td scope="row" hidden>'+data.id+'</td><td scope="row">'+data.position+'</td><td class="inpt">'+data.name+'</td><td class="inpt">'+data.birthdate+'</td><td class="inpt">'+data.created_at+'</td></tr>'))  }
            });
        }
       //add new section2
        $('#SubmitForm2').on('submit',function(e){
          event.preventDefault();
           let data={};
            data.name = $('#name2').val();
            data.birthdate = $('#birthdate2').val();
            data.created_at = $('#created_at2').val();           
           sort2(data);
        });

        function sort2(data){
          $.ajax({
            url: '{{route('store2')}}',
            type:"post",
            data:{
                "_token": "{{ csrf_token() }}",
                "name":data.name,
                "birthdate":data.birthdate,
                "created_at":data.created_at
            },
            success:function(data){
              $('#sortable2').append( $('<tr id='+data.id+'><td hidden>Section_2</td><td scope="row" hidden>'+data.id+'</td><td scope="row">'+data.position+'</td><td class="inpt">'+data.name+'</td><td class="inpt">'+data.birthdate+'</td><td class="inpt">'+data.created_at+'</td></tr>'))  }
            });
        }
       
         //delet ajax 
        function delettr(id,table){
            $.ajax({
                url:'{{route('destroy')}}',
                type:'post',
                headers: {
                'X-CSRF-Token': '{{ csrf_token() }}',
                },
                data:{"id":id,"table":table},
                success:function(){
                  if(table=="Section_1"){
                    $('#sortable1 #'+id+'').remove();
                    var orderdata = new Array();
                    $('#sortable1>tr').each(function() {
                      orderdata.push($(this).attr("id"));
                    });
              updateOrder(orderdata);
                  }else{ $('#sortable2 #'+id+'').remove();
                      var orderdata = new Array();
                    $('#sortable2>tr').each(function() {
                      orderdata.push($(this).attr("id"));
                    });
                  updateOrder2(orderdata);}
                }
              })    
        }
/////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////        
       
        $( "#sortable1" ).sortable({
            connectWith: "#sortable2",
            cancel:'span',
            receive : function (event, ui) {
              let data={};
              data.name=$(ui.item).closest("tr").find("td:eq(3)").text();
              data.birthdate=$(ui.item).closest("tr").find("td:eq(4)").text();
              data.created_at=$(ui.item).closest("tr").find("td:eq(5)").text();
              sortorder(data);
              // var orderdata = new Array();
              //   $('#sortable1>tr').each(function() {
              //     orderdata.push($(this).attr("id"));
              //   });
              // updateOrder(orderdata);
            },   
            stop: function() {
              var selectedData = new Array();
                $('#sortable1>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                updateOrder(selectedData);
            },
            remove : function (event, ui) {
              delettr($(ui.item).closest("tr").find("td:eq(1)").text(),"Section_1");
             
              }
        });


        $( "#sortable2" ).sortable({
            connectWith: "#sortable1",
            cancel:'span',
            receive : function (event, ui) {
              var position=0;
                $('#sortable2>tr').each(function() {
                      position++;
                     if($(this).attr("id")==$(ui.item).closest("tr").find("td:eq(1)").text()){
                      return false;
                     }
                });
              let data={};
              data.name=$(ui.item).closest("tr").find("td:eq(3)").text();
              data.birthdate=$(ui.item).closest("tr").find("td:eq(4)").text();
              data.created_at=$(ui.item).closest("tr").find("td:eq(5)").text();
              sortorder2(data,position);
              },   
            stop: function() {
              var selectedData2 = new Array();
                $('#sortable2>tr').each(function() {
                    selectedData2.push($(this).attr("id"));
                });
                updateOrder2(selectedData2);
            },
            remove : function (event, ui) {
              delettr($(ui.item).closest("tr").find("td:eq(1)").text(),"Section_2");
              var orderdata = new Array();
                $('#sortable2>tr').each(function() {
                  orderdata.push($(this).attr("id"));
                });
              updateOrder2(orderdata);
              }
        });

    function updateOrder(data) {
     
        $.ajax({
            url:'{{route('order')}}',
            type:'post',
            headers: {
              'X-CSRF-Token': '{{ csrf_token() }}',
              },
            data:{"data":data},
            success:function(data){
              $('#sortable1').html('');
            $.each(data, function(index, item) {
              $('#sortable1').html(''); //clears container for new data
            $.each(data.data, function(i, item) {
              $('#sortable1').append( $('<tr id='+item.id+'><td hidden>Section_2</td><td scope="row" hidden>'+item.id+'</td><td scope="row">'+item.position+'</td><td class="inpt">'+item.name+'</td><td class="inpt">'+item.birthdate+'</td><td class="inpt">'+item.created_at+'</td></tr>'))  }
          );
            });
                      }
        })
    }
    function updateOrder2(data) {
     
        $.ajax({
            url:'{{route('order2')}}',
            type:'post',
            headers: {
              'X-CSRF-Token': '{{ csrf_token() }}',
              },
            data:{"data":data},
            success:function(data){
                $('#sortable2').html('');
              $.each(data, function(index, item) {
                $('#sortable2').html(''); //clears container for new data
              $.each(data.data, function(i, item) {
                $('#sortable2').append( $('<tr id='+item.id+'><td hidden>Section_2</td><td scope="row" hidden>'+item.id+'</td><td scope="row">'+item.position+'</td><td class="inpt">'+item.name+'</td><td class="inpt">'+item.birthdate+'</td><td class="inpt">'+item.created_at+'</td></tr>'))  }
                );
              });
                 
            }
        })
    }
    function sortorder2(data,position){
      $('#sortable2').eq(position).append( $('<tr id='+data.id+'><td hidden>Section_2</td><td scope="row" hidden>'+data.id+'</td><td scope="row">'+data.position+'</td><td class="inpt">'+data.name+'</td><td class="inpt">'+data.birthdate+'</td><td class="inpt">'+data.created_at+'</td></tr>'));

          $.ajax({
            url: '{{route('store2')}}',
            type:"post",
            data:{
                "_token": "{{ csrf_token() }}",
                "name":data.name,
                "birthdate":data.birthdate,
                "created_at":data.created_at,
                "position":data.position
            },success:function(){
            
               }
            });
        }
        function sortorder(data){
          $.ajax({
            url: '{{route('store')}}',
            type:"post",
            data:{
                "_token": "{{ csrf_token() }}",
                "name":data.name,
                "birthdate":data.birthdate,
                "created_at":data.created_at
            }
            });
        }
</script>
    </body>
</html>
