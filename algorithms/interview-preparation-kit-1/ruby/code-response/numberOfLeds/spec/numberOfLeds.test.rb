require_relative "../src/numberOfLeds"

describe NumberOfLeds do
    describe ".leds" do
        context "Counting number of leds" do
            it "return 2" do
                expect(NumberOfLeds.leds(1)).to eql(2)
            end
        end

        context "Counting number of leds" do
            it "return 5" do
                expect(NumberOfLeds.leds(2)).to eql(5)
            end
        end

        context "Counting number of leds" do
            it "return 25" do
                expect(NumberOfLeds.leds(23456)).to eql(25)
            end
        end

        context "Counting number of leds" do
            it "return 27" do
                expect(NumberOfLeds.leds(115380)).to eql(27)
            end
        end

        context "Counting number of leds" do
            it "return 29" do
                expect(NumberOfLeds.leds(2819311)).to eql(29)
            end
        end
    end
end