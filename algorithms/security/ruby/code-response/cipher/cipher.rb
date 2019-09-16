class Array
  def rotate (n) 
    self.slice(n,self.length).concat(self.slice(0,n))
  end
end    


class Cipher 
  def Cipher.complent(rotate) 
    complent = {};
    inputChars = ('a'..'z').to_a
    outputChars = inputChars.rotate(rotate);

    
    inputChars.each_with_index do |char,index|
      complent[char.downcase] = outputChars[index].downcase;
      complent[char.upcase] = outputChars[index].upcase;
    end

    complent
  end

  def Cipher.rot(str, rotate = 13) 
    substitution = self.complent(rotate);

    str
      .split('')
      .map {|char| substitution[char] || char}
      .join('')
  end

  def Cipher.allRots(str) 
    rots = {}

    (1...26).each {|rot| rots[:"rot#{rot}"] = self.rot(str,rot)}

    rots;
  end
end
