class ZeroMeansZero
    def ZeroMeansZero.noZero(a, b)
        sum = (a + b).to_s
        while sum.include? "0" do
            sum = sum.sub('0', '')
        end
        return sum.to_i
    end
end