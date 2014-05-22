jQuery(document).ready(function(){
  jQuery('.treeEx  ol.tree:first').nestedSortable({
     items: 'li'
    , toleranceElement: '> div'
    , forcePlaceholderSize: true
    , handle: 'div'
    , helper: 'clone'
    , isTree: true
  });

  jQuery('.treeEx button.show-answer-btn').on('click', function(){
     var container = jQuery(this).closest('.treeEx');

    container.find('.mupi-exercise-answer').show();

    var student = container.find('.quest ol.tree').find("*").removeAttr("style");
    var response = container.find('.resp ol.tree').find("*").removeAttr("style");

    console.log(student[0].innerHTML == response[0].innerHTML);
  });
});
