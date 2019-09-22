def hackerrankInString(s)
  hackerrank = 'hackerrank';
  index = 0
  for i in 0...s.length do
    if (s[i] == hackerrank[index])
      index = index+1
    end
    if (index == hackerrank.length)
      return 'YES';
    end
  end
  'NO'
end
