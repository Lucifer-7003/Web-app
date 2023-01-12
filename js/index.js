$(document).ready(function () {
  $("form").get(0).reset();
  $("#state").prop("disabled", true);
  $("#city").prop("disabled", true);
});

$("#job_name").change(function (e) {
  e.preventDefault();
  $.ajax({
    type: "GET",
    url: "stateOptions.php",
    success: function (data) {
      $("#state_list").html(data);
    },
  });
  $("#state").prop("disabled", false);
});

$("#state").change(function (e) {
  e.preventDefault();
  var state_value = $("#state").val();
  $.ajax({
    type: "POST",
    url: "cityOptions.php",
    data: { state_value: state_value },
    success: function (data) {
      $("#city_list").html(data);
    },
  });
  $("#city").prop("disabled", false);
});
