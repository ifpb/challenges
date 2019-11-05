require_relative "../../src/FunnyString/funny_string"

describe "Funny String" do
  context "Is the string abc funny?" do
    it "The string abc is funny!" do
      expect(FunnyString.check('abc')).to eq('Funny')
    end
  end

  context "Is the string abd funny?" do
    it "The string abd is funny!" do
      expect(FunnyString.check('abd')).to eq('Not Funny')
    end
  end

  context "Is the string acxz funny?" do
    it "The string acxz is funny!" do
      expect(FunnyString.check('acxz')).to eq('Funny')
    end
  end

  context "Is the string bcxz funny?" do
    it "The string bcxz is funny!" do
      expect(FunnyString.check('bcxz')).to eq('Not Funny')
    end
  end

end