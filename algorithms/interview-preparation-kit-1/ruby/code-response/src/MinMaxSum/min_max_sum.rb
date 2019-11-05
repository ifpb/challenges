class MinMaxSum
  def MinMaxSum.calc(array)
    array.sort!
    [array.slice(0..-2).inject(:+), array.slice(1..-1).inject(:+)]
  end
end