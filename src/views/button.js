// Generated by CoffeeScript 1.7.1
(function() {
  App.register("{{id}}", function(params, scope, widgets) {
    var $container, action;
    action = widgets['action'];
    $container = scope.$id(params['containerId']);
    $container.on("click", function(e) {
      e.preventDefault();
      return action.load();
    });
    return {
      onApply: function(callback) {
        return action.onApply(callback);
      }
    };
  });

}).call(this);

//# sourceMappingURL=button.map
