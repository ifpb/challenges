require_relative "../src/repeated_string"

describe RepeatedString do
  describe ".repeat" do
    context "('a', 10)" do
      it "10" do
        expect(RepeatedString.repeat('a', 10)).to eql(10)
      end
    end
    context "('b', 10)" do
      it "0" do
        expect(RepeatedString.repeat('b', 10)).to eql(0)
      end
    end
    context "('aba', 10)" do
      it "7" do
        expect(RepeatedString.repeat('aba', 10)).to eql(7)
      end
    end
    context "('a', 1000000000000)" do
      it "1000000000000" do
        expect(RepeatedString.repeat('a', 1000000000000)).to eql(1000000000000)
      end
    end
  end
end