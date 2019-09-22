class Grammar
    def Grammar.spelling(word)
        return word.split('')
            .select do |w|
                w != ' '
            end
            .map do |w| 
                w.upcase
            end
            .join('-')
    end

end