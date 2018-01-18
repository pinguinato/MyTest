QUnit.test( "hello test", function( assert ) {
    assert.ok( 1 == '1', "Passed!" );
    assert.ok( 1 === 1 , "Passed!" );
    assert.ok( 1 === '2', "Passed!");
    assert.ok( 2 === 2 , "Passed!");
    assert.ok( 2 == '2', "Passed!");
    assert.ok( 2 == '', "Passed!");
  });

  var greeting = "Ciao Mondo";
  QUnit.test("A Hello World Test",function (assert) {
    assert.equal(greeting, "Ciao Mondo", "Expect greeting of Hello World");
   }); 