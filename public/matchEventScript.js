$(document).ready(function(){



    var run = document.getElementById('run');
    var extra = document.getElementById('extra');
    var wicket = document.getElementById('wicket');


    $('#button1').click(function () {
        run.setAttribute('value','1');
    });

    $('#button2').click(function () {
        run.setAttribute('value','2');
    });

    $('#button3').click(function () {
        run.setAttribute('value','3');
    });

    $('#button4').click(function () {
        run.setAttribute('value','4');
    });

    $('#button6').click(function () {
        run.setAttribute('value','6');
    });

    $('#buttonlb').click(function () {
        extra.setAttribute('value','1');
    });

    $('#buttonnb').click(function () {
        extra.setAttribute('value','1');
    });

    $('#buttonw').click(function () {
        wicket.setAttribute('value','2');
    });


    // TEST CODE

    $('#fixtureSelect').on('change',function(e){
        console.log(e);
        var match_id = e.target.value;
        //console.log(match_id);
        //ajax
        $.get('/ajax-team1?match_id='+ match_id,function(data){
            //success data
            console.log(data);

            var team1 =  $('#team1').empty();
            var team2 = $('#team2').empty();
            var battingTeam = $('#battingTeam').empty();
            var bowlingTeam = $('#bowlingTeam').empty();

            $.each(data[0],function(create,teamfirst){


                // var teamfirst = team1Obj[0];
                console.log(teamfirst['name']);

                var option = $('<option/>', {id:create, value:teamfirst});
                team1.append('<option value ="'+teamfirst.id+'">'+teamfirst.name+'</option>');
            });

            $.each(data[1],function(create,teamsecond){


                // var teamfirst = team1Obj[0];
                console.log(teamsecond['name']);

                var option = $('<option/>', {id:create, value:teamsecond});
                team2.append('<option value ="'+teamsecond.id+'">'+teamsecond.name+'</option>');
            });

            $.each(data[2],function(create,team){


                // var teamfirst = team1Obj[0];
                console.log(team['name']);

                var option = $('<option/>', {id:create, value:team});
                battingTeam.append('<option value ="'+team.id+'">'+team.name+'</option>');
                bowlingTeam.append('<option value ="'+team.id+'">'+team.name+'</option>');

            });


        });
    });

    $('#battingTeam').on('change',function(e){
        console.log(e);
        var team_id = e.target.value;
        //console.log(match_id);
        //ajax
        $.get('/batting?team_id='+ team_id,function(data){
            //success data
            console.log(data);

            var batting1 = $('#batting1').empty();
            var batting2 = $('#batting2').empty();

            $.each(data,function(create,player){


                // var teamfirst = team1Obj[0];
                console.log(player['name']);

                var option = $('<option/>', {id:create, value:player});
                batting1.append('<option value ="'+player.id+'">'+player.name+'</option>');
                batting2.append('<option value ="'+player.id+'">'+player.name+'</option>');

            });




        });
    });
    $('#bowlingTeam').on('change',function(e){
        console.log(e);
        var team_id = e.target.value;
        //console.log(match_id);
        //ajax
        $.get('/batting?team_id='+ team_id,function(data){
            //success data
            console.log(data);

            var bowler = $('#bowler').empty();

            $.each(data,function(create,player){


                // var teamfirst = team1Obj[0];
                console.log(player['name']);

                var option = $('<option/>', {id:create, value:player});
                bowler.append('<option value ="'+player.id+'">'+player.name+'</option>');

            });




        });
    });

    $('#scoreSubmit').on('click', function() {

        var batting1 = document.getElementById('battingradio1').checked;
        var batting2 = document.getElementById('battingradio2').checked;
        var run =  $('#run').val();
        console.log(run);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: '/scoring',
            data: {
                '_token': $('input[name=_token]').val(),
                'match_id': $("#fixtureSelect").val(),
                'battingTeam': $('#battingTeam').val(),
                'run': $('#run').val(),
                'extra': $('#extra').val(),
                'batting1': $('#batting1').val(),
                'batting2': $('#batting2').val(),

                'battingradio1': batting1,
                'battingradio2': batting2,
                'bowler': $('#bowler').val()
            },
            success: function(data) {
                // $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
                console.log(data);
            }
        });

    });



    // END OF TEST CODE
});