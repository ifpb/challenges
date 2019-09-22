class RepeatedString
    def RepeatedString.repeat(s, n)
        as = s.count("a")
        repeat = n / s.size
        remainder = n % s.size
        return repeat * as + s.slice(0, remainder).count("a")
    end

end