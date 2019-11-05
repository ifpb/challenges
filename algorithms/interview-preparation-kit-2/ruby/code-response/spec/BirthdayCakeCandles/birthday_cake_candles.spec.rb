require_relative "../../src/BirthdayCakeCandles/birthday_cake_candles"

describe BirthdayCakeCandles do
  describe ".candle" do
    context "getting count of the highter candle number" do
      it "return 2" do
        expect(BirthdayCakeCandles.candle([3, 2, 1, 3])).to eql(2)
      end
    end
  
    context "getting count of the highter candle number" do
      it "return 5" do
        expect(BirthdayCakeCandles.candle([18, 90, 90, 13, 90, 75, 90, 8, 90, 43])).to eql(5)
      end
    end
  end
end
 