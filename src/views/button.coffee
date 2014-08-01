App.register "{{id}}", (params, scope, widgets) ->
  action = widgets['action']
  $container = scope.$id params['containerId']
  $container.on "click", (e) ->
    e.preventDefault()
    action.load()

  onApply: (callback) ->
    action.onApply callback
