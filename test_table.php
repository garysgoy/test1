<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Data Table</title>
    <meta name="author" content="zhixin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">
</head>
<body>

<div style="width: 80%; margin: 0 auto 0 auto;">
   <div id="toolbar">
        <div class="form-inline" role="form">
            <div class="form-group">
                <span>Offset: </span>
                <input name="offset" class="form-control w70" type="number" value="0">
            </div>
            <div class="form-group">
                <span>Limit: </span>
                <input name="limit" class="form-control w70" type="number" value="5">
            </div>
            <div class="form-group">
                <input name="search" class="form-control" type="text" placeholder="Search">
            </div>
            <button id="ok" type="submit" class="btn btn-default">OK</button>
        </div>
    </div>

<!--
    data-query-params="queryParams"
    data-response-handler="responseHandler"

    v4.html have full server side paging and more
-->
    <table data-toggle="table" 
    data-url="data1.json" 
    data-pagination="true"
    data-id-field="id"
    data-page-list="[10, 25, 50, 100, ALL]"
    data-show-columns="true"
    data-side-pagination="server"
    data-toolbar="#toolbar"
    data-show-refresh="true"
    data-show-toggle="true"
    data-detail-view="true"
    data-detail-formatter="detailFormatter"
    data-search="true"
    data-row-style="rowStyle">
    <thead style="background-color: green">
        <tr>
            <th data-field="state" data-checkbox="true"
                    data-formatter="stateFormatter"></th>            
            <th data-field="id" data-formatter="ID: %s" data-switchable="false">Item ID</th>
            <th data-field="name" data-sortable="true" data-switchable="true">Item Name</th>
            <th data-field="price" data-halign="center" data-align="right" data-sortable="true"  data-sorter="priceSorter" data-formatter="priceFormatter" data-switchable="true">Item Price</th>
        </tr>
    </thead>
</table>
<script>
function rowStyle(row, index) {
        var classes = ['active', 'success', 'info', 'warning', 'danger'];

        if (index % 2 === 0 && index / 2 < classes.length) {
            return {
                classes: classes[index / 2]
            };
        }
        return {};
    }
 function priceSorter(a, b) {
        a = +a.substring(1); // remove $
        b = +b.substring(1);
        if (a > b) return 1;
        if (a < b) return -1;
        return 0;
    }
   function priceFormatter(value) {
        // 16777215 == ffffff in decimal
        var color = '#'+Math.floor(Math.random() * 6777215).toString(16);
        return '<div  style="color: ' + color + '">' +
                '$' +
                value.substring(1) +
                '</div>';
    }
 function stateFormatter(value, row, index) {
        if (index === 2) {
            return {
                disabled: true
            };
        }
        if (index === 5) {
            return {
                disabled: true,
                checked: true
            }
        }
        return value;
    }
    function queryParams() {
        var params = {};
        $('#toolbar').find('input[name]').each(function () {
            params[$(this).attr('name')] = $(this).val();
        });
        return params;
    }

    function responseHandler(res) {
        return res.rows;
    }
    function detailFormatter(index, row) {
        var html = [];
        $.each(row, function (key, value) {
            html.push('<p><b>' + key + ':</b> ' + value + '</p>');
        });
        return html.join('');
    }
    var $table = $('#table');
    $(function () {
    });
            
    </script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
</body>
</html>
