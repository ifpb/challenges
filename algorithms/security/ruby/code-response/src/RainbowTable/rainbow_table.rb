# use MD5.rb
# use array_combination.rb
require 'digest'

class RainbowTable
  attr_reader :table_data
  attr_reader :letters
  
  def initialize(length)
    @letters = ('a'..'z').to_a
    @table_data = self.table(length)
  end 

  def table(length)
  
    table_hash = {}
    letters
      .repeated_combination(length)
      .each do |combination| 
        table_hash[Digest::MD5.hexdigest combination.join('')] = combination.join('');
      end
    @table_data = table_hash  
      
  end

  def cracker(hash)
    @table_data[hash]
  end

end
