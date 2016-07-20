angular.module('smartmrpApp', [])
  .controller('smartmrpController', function() {
    var smartMrp = this;
    smartMrp.todos = [
      {text:'learn angular', done:true},
      {text:'build an angular app', done:false}];
 
    smartMrp.addTodo = function() {
      smartMrp.todos.push({text:smartMrp.todoText, done:false});
      smartMrp.todoText = '';
    };
 
    smartMrp.remaining = function() {
      var count = 0;
      angular.forEach(smartMrp.todos, function(todo) {
        count += todo.done ? 0 : 1;
      });
      return count;
    };
 
    smartMrp.archive = function() {
      var oldTodos = smartMrp.todos;
      smartMrp.todos = [];
      angular.forEach(oldTodos, function(todo) {
        if (!todo.done) smartMrp.todos.push(todo);
      });
    };
  });