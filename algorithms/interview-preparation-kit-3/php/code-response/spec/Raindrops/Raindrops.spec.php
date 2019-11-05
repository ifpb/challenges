<?php

use Raindrops\Raindrops;

describe('Raindrops', function () {
  it('test the sound for 1 is 1', function() {
    expect(Raindrops::convert(1))->toEqual('1');
  });
  
  it('test the sound for 3 is pling', function() {
    expect(Raindrops::convert(3))->toEqual('Pling');
  });
  
  it('test the sound for 5 is plang', function() {
    expect(Raindrops::convert(5))->toEqual('Plang');
  });
  
  it('test the sound for 7 is plong', function() {
    expect(Raindrops::convert(7))->toEqual('Plong');
  });
  
  it('test the sound for 6 is pling as it has a factor 3', function() {
    expect(Raindrops::convert(6))->toEqual('Pling');
  });
  
  it('test 2 to the power 3 does not make a raindrop sound as 3 is the exponent not the base', function() {
    expect(Raindrops::convert(8))->toEqual('8');
  });
  
  it('test the sound for 9 is pling as it has a factor 3', function() {
    expect(Raindrops::convert(9))->toEqual('Pling');
  });
  
  it('test the sound for 10 is plang as it has a factor 5', function() {
    expect(Raindrops::convert(10))->toEqual('Plang');
  });
  
  it('test the sound for 14 is plong as it has a factor of 7', function() {
    expect(Raindrops::convert(14))->toEqual('Plong');
  });
  
  it('test the sound for 15 is plingplang as it has factors 3 and 5', function() {
    expect(Raindrops::convert(15))->toEqual('PlingPlang');
  });
  
  it('test the sound for 21 is plingplong as it has factors 3 and 7', function() {
    expect(Raindrops::convert(21))->toEqual('PlingPlong');
  });
  
  it('test the sound for 25 is plang as it has a factor 5', function() {
    expect(Raindrops::convert(25))->toEqual('Plang');
  });
  
  it('test the sound for 27 is pling as it has a factor 3', function() {
    expect(Raindrops::convert(27))->toEqual('Pling');
  });
  
  it('test the sound for 35 is plangplong as it has factors 5 and 7', function() {
    expect(Raindrops::convert(35))->toEqual('PlangPlong');
  });
  
  it('test the sound for 49 is plong as it has a factor 7', function() {
    expect(Raindrops::convert(49))->toEqual('Plong');
  });
  
  it('test the sound for 52 is 52', function() {
    expect(Raindrops::convert(52))->toEqual('52');
  });
  
  it('test the sound for 105 is plingplangplong as it has factors 3 5 and 7', function() {
    expect(Raindrops::convert(105))->toEqual('PlingPlangPlong');
  });
  
  it('test the sound for 3125 is plang as it has a factor 5', function() {
    expect(Raindrops::convert(3125))->toEqual('Plang');
  });
});
