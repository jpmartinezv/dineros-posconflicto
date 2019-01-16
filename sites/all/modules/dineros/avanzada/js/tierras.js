jQuery(document).ready(function ($) {
    var map = L.map('mapa-lideres')
        .setView([4.624335, -74.063644], 5);

    // Fit bounds
    map.fitBounds([
        [11.730349, -75.256526],
        [-4.090973, -68.694434]
    ]);

    L.tileLayer('https://api.mapbox.com/styles/v1/jpmartinezv/cjbcquzit7gjs2rpng0ez81of/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoianBtYXJ0aW5lenYiLCJhIjoiOThjYzQ4ZjU2MGYwNDc5ZWFjMmYwNWNmNWIzZjJjYTgifQ.ZetSTKgVRK4nPygqhT4q3A', {
        attribution: 'tierraendisputa.com',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoianBtYXJ0aW5lenYiLCJhIjoiOThjYzQ4ZjU2MGYwNDc5ZWFjMmYwNWNmNWIzZjJjYTgifQ.ZetSTKgVRK4nPygqhT4q3A'
    }).addTo(map);

    map._initPathRoot();

    var svg = d3.select("#mapa-lideres").select("svg");

    d3.json('sites/all/modules/rutas/home/data/Colombia.geojson', function (data) {
        drawFeatures(data);
        d3.json('mapa/data', function (data_prev) {
            var data = [];
            $.each(data_prev, function (key, element) {
                data.push(element);
            });
            drawSquares(data);
        });

    });

    function projectPoint(x, y) {
        var point = map.latLngToLayerPoint(new L.LatLng(y, x));
        this.stream.point(point.x, point.y);
    }

    function drawFeatures(data) {
        var g = svg.append('g').attr('class', 'leaflet-zoom-hide');

        var transform = d3.geoTransform({ point: projectPoint });
        var path = d3.geoPath().projection(transform);

        var featureElement = g.selectAll("path")
            .data(data.features)
            .enter()
            .append("path")
            .attr("fill", "#FFAF0D")
            .attr("fill-opacity", 0.50);

        map.on("viewreset", update);

        update();

        function update() {
            featureElement.attr("d", path);
        }
    }

    function drawSquares(data) {
        var g = svg.append('g').attr('class', 'nodes leaflet-zoom-hide');
        var node = g
            .selectAll(".node")
            .data(data)
            .enter()
            .append("rect")
            .attr('class', 'node')
            .attr("transform", function (d) {
                var LatLng = new L.LatLng(d.field_ubicacion[0], d.field_ubicacion[1]);

                return "translate(" +
                    map.latLngToLayerPoint(LatLng).x + "," +
                    map.latLngToLayerPoint(LatLng).y + ")";
            })
            .attr('x', 0)
            .attr('y', 0)
            .attr("width", 10)
            .attr("height", 10)
            .attr("fill", '#330b25')
            .attr("fill-opacity", 0.80)
            .attr('cursor', 'pointer')
            .on('mousemove', function (d) {
                showTooltip(d);
            })
            .on('mouseout', function (d) {
                hideTooltip();
            })
            .on('click', function (d) {
                node.attr("fill", '#330b25')
                d3.select(this).attr('fill', '#fff');
                showCard(d);
            });

        map.on("viewreset", update);

        update();

        function update() {
            node
                .attr("transform", function (d) {
                    var LatLng = new L.LatLng(d.field_ubicacion[0], d.field_ubicacion[1]);

                    return "translate(" +
                        map.latLngToLayerPoint(LatLng).x + "," +
                        map.latLngToLayerPoint(LatLng).y + ")";
                });
        }

      var f_comunidad = '';
var f_departamento = '';
var f_utilidad = '';

function filter() {
    node
        .attr('display', function (d) {
        var flag = d.field_tipo_de_comunidad == f_comunidad || !f_comunidad;
        flag = flag && (d.field_ubicacion_departamento == f_departamento || !f_departamento);
        flag = flag && (d.field_utilidad_del_predio_ == f_utilidad || !f_utilidad);
        return flag ? 'inline' : 'none';
    });
}

$("#tipo_de_comunidad").change(function () {
    f_comunidad = $(this).val();
    filter();
});
$("#departamento").change(function () {
    f_departamento = $(this).val();
    filter();
});
$("#tipo_de_utilidad").change(function () {
    f_utilidad = $(this).val();
    filter();
});


    }

    // $("#cs-close").on('click', hideCard);
    // $("#modal").on('click', hideCard);

    // $(document).keyup(function (e) {
    //     if (e.keyCode === 27) {
    //         hideCard();
    //     }
    // });

    // Hide card
    function hideCard() {
        $("#modal").fadeOut('fast');
        $("#card").fadeOut('fast');
    }

    // Show card
    function showCard(d) {
        $("#modal").fadeIn('fast');
        $("#card").fadeIn('fast');
        $("#cs-nombre").html(d.title);
        $("#cs-image").attr('src', d.field_foto);
        $("#cs-municipio").html(d.field_ubicacion_municipio);
        $("#cs-departamento").html(d.field_ubicacion_departamento);
        $("#cs-comunidad").html(d.field_tipo_de_comunidad);
        $("#cs-utilidad").html(d.field_utilidad_del_predio_);
        $("#cs-hectareas").html(d.field_hectareas);
        $("#cs-predios").html(d.field_numero_de_predios);
        $("#cs-link").attr('href', '/node/' + d.nid);
    }

    function showTooltip(d) {
        var coordinates = [0, 0];
        coordinates = d3.mouse(d3.select("#mapa-lideres").node());
        var x = coordinates[0];
        var y = coordinates[1];

        var tooltip = $("#tooltip");

        tooltip
            .css({
                left: x + 'px',
                top: y + 'px'
            })
            .text(d.title)
            .show();
    }

    function hideTooltip() {
        $("#tooltip").hide();
    }
});