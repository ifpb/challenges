class FunnyString
  def FunnyString.check(s) 
    reverse = s.split('').map {|l| l.ord}
    string = s.split('').map{|l| l.ord}
    reverse.reverse!

    for i in 0...(string.length-1) do
      if ((string[i + 1] - string[i]).abs != (reverse[i + 1] - reverse[i]).abs) 
        return 'Not Funny'
      end
    end
    return 'Funny'
  end
end