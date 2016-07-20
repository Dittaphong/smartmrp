<!doctype html>
<html ng-app="smartmrpApp">
  <head>
    <script src="<?php echo base_url();?>js/angular.js"></script>
    <script src="<?php echo base_url();?>js/todo.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>css/todo.css">
  </head>
  <body>
    <h2>Todo</h2>
    <div ng-controller="smartmrpController as smartMrp">
      <span>{{smartMrp.remaining()}} of {{smartMrp.todos.length}} remaining</span>
      [ <a href="" ng-click="smartMrp.archive()">archive</a> ]
      <ul class="unstyled">
        <li ng-repeat="todo in smartMrp.todos">
          <label class="checkbox">
            <input type="checkbox" ng-model="todo.done">
            <span class="done-{{todo.done}}">{{todo.text}}  </span>
          </label>
        </li>
      </ul>
      <form ng-submit="smartMrp.addTodo()">
        <input type="text" ng-model="smartMrp.todoText"  size="30"
               placeholder="add new todo here">
        <input class="btn-primary" type="submit" value="add">
      </form>
    </div>
  </body>
</html>